<?php

require_once dirname(__FILE__) . '/../../../../../mind3rd/API/languages/pt-BR/Inflect.php';

/**
 * Test class for Inflect.
 * Generated by PHPUnit on 2010-11-06 at 23:55:39.
 */
class InflectTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var Inflect
	 */
	protected $object;

	/**
	 * Sets up the fixture, for example, opens a network connection.
	 * This method is called before a test is executed.
	 */
	protected function setUp() {
		$this->object = new Inflect;
	}

	/**
	 * Tears down the fixture, for example, closes a network connection.
	 * This method is called after a test is executed.
	 */
	protected function tearDown() {

	}

	public function testisSingular() {
		$this->assertTrue(Inflect::isSingular('homem'));
	}
	public function testisSingular1() {
		$this->assertFalse(Inflect::isSingular('homens'));
	}
	public function testisSingular2() {
		$this->assertFalse(Inflect::isSingular('caminhões'));
	}
	public function testisSingular3() {
		$this->assertTrue(Inflect::isSingular('caminhão'));
	}
	public function testisSingular4() {
		$this->assertFalse(Inflect::isSingular('pães'));
	}
	public function testisSingular5() {
		$this->assertTrue(Inflect::isSingular('pão'));
	}
	public function testisSingular6() {
		$this->assertFalse(Inflect::isSingular('carros'));
	}
	public function testisSingular7() {
		$this->assertTrue(Inflect::isSingular('atlas'));
	}

	public function testToPlural() {
		$this->assertEquals(Inflect::toPlural('homem'), 'homens');
	}
	public function testToPlural1() {
		$this->assertEquals(Inflect::toPlural('caminhão'), 'caminhões');
	}
	public function testToPlural2() {
		$this->assertEquals(Inflect::toPlural('pão'), 'pães');
	}
	public function testToPlural3() {
		$this->assertEquals(Inflect::toPlural('carro'), 'carros');
	}
	public function testToPlural4() {
		$this->assertEquals(Inflect::toPlural('átlas'), 'átlas');
	}
	public function testToPlural5() {
		$this->assertEquals(Inflect::toPlural('óculos'), 'óculos');
	}
	public function testToPlural6() {
		$this->assertEquals(Inflect::toPlural('peão'), 'peões');
	}
	public function testToPlural7() {
		$this->assertEquals(Inflect::toPlural('aluna'), 'alunas');
	}

	public function testToSingular() {
		$this->assertEquals(Inflect::toSingular('homens'), 'homem');
	}
	public function testToSingular1() {
		$this->assertEquals(Inflect::toSingular('caminhões'), 'caminhão');
	}
	public function testToSingular2() {
		$this->assertEquals(Inflect::toSingular('pães'), 'pão');
	}
	public function testToSingular3() {
		$this->assertEquals(Inflect::toSingular('carros'), 'carro');
	}
	public function testToSingular4() {
		$this->assertEquals(Inflect::toSingular('átlas'), 'átlas');
	}
	public function testToSingular5() {
		$this->assertEquals(Inflect::toSingular('óculos'), 'óculos');
	}
	public function testToSingular6() {
		$this->assertEquals(Inflect::toSingular('peões'), 'peão');
	}
	public function testToSingular7() {
		$this->assertEquals(Inflect::toSingular('alunas'), 'aluna');
	}

	public function testToFemale() {
		$this->assertEquals(Inflect::toFemale('aluno'), 'aluna');
	}
	public function testToFemale1() {
		$this->assertEquals(Inflect::toFemale('réu'), 'ré');
	}
	public function testToFemale2() {
		$this->assertEquals(Inflect::toFemale('gato'), 'gata');
	}
	public function testToFemale3() {
		$this->assertEquals(Inflect::toFemale('leão'), 'leoa');
	}
	public function testToFemale4() {
		$this->assertEquals(Inflect::toFemale('chorão'), 'chorona');
	}
	public function testToFemale5() {
		$this->assertEquals(Inflect::toFemale('mestre'), 'mestra');
	}
	public function testToFemale6() {
		$this->assertEquals(Inflect::toFemale('doutor'), 'doutora');
	}

	/**
	 * @todo Implement testToMale().
	 */
	public function testToMale1() {
		$this->assertEquals(Inflect::toMale('cada'), 'cada');
	}
	public function testToMale2() {
		$this->assertEquals(Inflect::toMale('aluna'), 'aluno');
	}
	public function testToMale3() {
		$this->assertEquals(Inflect::toMale('ré'), 'réu');
	}
	public function testToMale4() {
		$this->assertEquals(Inflect::toMale('gata'), 'gato');
	}
	public function testToMale5() {
		$this->assertEquals(Inflect::toMale('leoa'), 'leão');
	}
	public function testToMale6() {
		$this->assertEquals(Inflect::toMale('chorona'), 'chorão');
	}
	public function testToMale7() {
		$this->assertEquals(Inflect::toMale('mestra'), 'mestre');
	}
	public function testToMale8() {
		$this->assertEquals(Inflect::toMale('doutora'), 'doutor');
	}

	public function testIsFemale() {
		$this->assertTrue(Inflect::isFemale('mulher'));
	}
	public function testIsFemale1() {
		$this->assertTrue(Inflect::isFemale('freira'));
	}
	public function testIsFemale2() {
		$this->assertTrue(Inflect::isFemale('casa'));
	}
	public function testIsFemale3() {
		$this->assertTrue(Inflect::isFemale('ré'));
	}
	public function testIsFemale4() {
		$this->assertFalse(Inflect::isFemale('réu'));
	}
	public function testIsFemale5() {
		$this->assertTrue(Inflect::isFemale('amorosa'));
	}
	public function testIsFemale6() {
		$this->assertFalse(Inflect::isFemale('campeão'));
	}
	public function testIsFemale7() {
		$this->assertFalse(Inflect::isFemale('chapél'));
	}
	public function testIsFemale8() {
		$this->assertTrue(Inflect::isFemale('chorona'));
	}
	public function testIsFemale9() {
		$this->assertTrue(Inflect::isFemale('pequenininha'));
	}

}

?>