<?php

/**
 * Funcão para receber o CREA do engenheiro.
 * @author Wesley Hanauer.
 */

/**
 * Classe herdeira da classe Pessoa.
 * @param string
 * @param string
 * @param string
 * @param string
 * @param string
 */
class Engenheiro extends Pessoa{
	private $CREA;

	/**
	 * Função getter do CREA.
	 * @return string
	 */
	public function getCREA(){
    	return $this->CREA;
	}

	/**
	 * Função setter do CREA.
	 * @param string
	 * @return string
	 */
	public function setCREA($e){
    	$this->CREA = $e;
	}
 }
