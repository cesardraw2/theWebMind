<?php
/**
 * This file is part of TheWebMind 3rd generation.
 * 
 * @author Felipe Nascimento de Moura <felipenmoura@gmail.com>
 * @license licenses/mind3rd.license
 */

/**
 * Description of pgsql
 *
 * @author Felipe Nascimento de Moura <felipenmoura@gmail.com>
 * @package DBMS
 */
class mysql implements DBMS{
	
	public function createDefault()
	{
		return "<object>DEFAULT</object> <value><defaultvalue></value>";
	}

	public function createReferences()
	{
		return "";
	}
	
	public function property()
	{
		return "<property><propertyname></property> <propertytype><propertysize> <propertydetails>";
	}
	
	public function createOptionsCheck()
	{
		return "";
	}
	
	public function notNullDefinition()
	{
		return "<object>NOT NULL</object>";
	}
	
	public function autoIncrementType()
	{
		return "int";
	}
	
	public function createUnique()
	{
		return "<object>UNIQUE</object>";
	}
	
	public function getHeader()
	{
		$author= substr($_SESSION['login'], 0, 30);
		$author= str_pad($author, 30);
		$header= "<comment>  -".str_pad('', 60, '-')."----
  --| ".str_pad("Generated by theWebMind project(mind3rd release)", 58)."|--
  --| ".str_pad("DBMS: ".str_pad('MySQL', 34)."Date: ". date('d/m/Y'), 58)."|--
  --| ".str_pad("Generator Author: Felipe Nascimento de Moura", 58)."|--
  --| ".str_pad("Source Author: ".$author, 58)."|--
";
		$header.= "  -".str_pad('', 60, '-')."----
  --".str_pad(strtoupper(Mind::$currentProject['name']).
					 " (version ".Mind::$currentProject['version'].")",
		  61, ' ', STR_PAD_BOTH)."--
  --".str_pad('', 60, '-')."---</comment>
";
		return $header;
	}
	
	public function createFK()
	{
		return "
<keyword>ALTER </keyword><object>TABLE</object> <tablename>
  <keyword>ADD</keyword> <object>CONSTRAINT</object> <constraintname>
  <object>FOREIGN KEY (<propertyname>)</object> <keyword>REFERENCES </keyword>
<referencetablename>(<referencecolumnname>);
";
	}
	
	public function createPrimaryKeys()
	{
		return "
    <object>CONSTRAINT</object> <element><fkname></element> <object>PRIMARY KEY</object> (<element><propertiesnames></element>)
";
	}
	
	public function createPK()
	{
		return "
<keyword>ALTER</keyword> <object>TABLE</object> <tablename>
  <keyword>ADD</keyword> <object>PRIMARY KEY</object> (<propertiesnames>);
";
	}
	
	public function createAutoIncrement()
	{
		return "<object>AUTO_INCREMENT</object>";
	}
	
	public function createTable()
	{
		return "
<keyword>CREATE </keyword><object>TABLE</object> <element class='mindTableName'><tablename></element>
(
    <properties>
    <primarykeys>
)ENGINE=InnoDB;
";
	}
	
	public function mustSort()
	{
		return false;
	}
	
	public function getModel($keyword)
	{
		if(method_exists($this, $keyword))
			return $this->$keyword();
		return false;
	}
}