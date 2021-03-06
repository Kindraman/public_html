<?php

namespace ResponsiveMenuPro\Services;
use ResponsiveMenuPro\Repositories\OptionRepository as OptionRepository;
use ResponsiveMenuPro\WPML\WPML as WPML;
use ResponsiveMenuPro\Factories\AdminSaveFactory as SaveFactory;
use ResponsiveMenuPro\Factories\OptionFactory as OptionFactory;
use ResponsiveMenuPro\Collections\OptionsCollection as OptionsCollection;

class OptionService {

	public function __construct(OptionRepository $repository, OptionFactory $factory) {
		$this->repository = $repository;
		$this->factory = $factory;
	}

	public function updateOptions(array $options) {

  	foreach($options as $key => $val)
  		$this->repository->update($this->factory->build($key, $val));

    $options = $this->all();

    $this->updateWpml($options);
    $this->buildFiles($options);

		return $options;
	}

	public function createOptions(array $options) {

  	foreach($options as $key => $val)
  		$this->repository->create($this->factory->build($key, $val));

    $options = $this->all();

  	$this->updateWpml($options);
  	$this->buildFiles($options);

  	return $options;
	}

	public function all() {
		return $this->repository->all();
	}

	public function updateWpml(OptionsCollection $options) {
    $wpml = new WPML;
		$wpml->saveFromOptions($options);
	}

	public function buildFiles(OptionsCollection $options) {
		if($options['external_files'] == 'on'):
    		$save_factory = new SaveFactory();
    		$save_factory->build($options);
  	endif;
	}

  public function buildFromPostArray(array $post) {
    return $this->repository->buildFromArray($post);
  }

}
