<?php

/**
 * Funcão para receber o CRM do médico.
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
class Medico extends Pessoa{
	private $CRM;

	/**
	 * Função getter do CREA.
	 * @return string
	 */
	public function getCRM(){
    	return $this->CRM;
	}

	/**
	 * Função setter do CRM.
	 * @param string
	 * @return string
	 */
	public function setCRM($e){
    	$this->CRM = $e;
	}
 }
