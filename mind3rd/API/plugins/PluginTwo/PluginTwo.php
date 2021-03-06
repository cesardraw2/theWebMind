<?php
    /**
     * This file is part of TheWebMind 3rd generation.
     * 
     * @author Felipe Nascimento de Moura <felipenmoura@gmail.com>
     * @license licenses/mind3rd.license
     */
	/*
	 * This is an example of plugin you may create
	 * This plugin simply runs when the program auth is
	 * called, and shows a message
	 *
	 * Notice that plugins set to run AFTER a specific program
	 * will only execute if the program runs plugins on after
	 * event
	 */
	class PluginTwo extends MindPlugin implements plugin
	{
		public $name= "Plugin Two";
		public $version= "0.1";
		public $description = "This is a demo plugin, disabled by default";
		public $links= Array();

		// change this flag to true and execute the test program
		// to see this plugin running
		public $active= true;

		public function run()
		{
			echo "EXECUTING THE PLUGIN TWO!!!\n";
		}

		public function __construct()
		{
			$this->setTrigger('test');
			$this->setEvent('after');
		}
	}