<?php

/**
 * Funcão para receber os dados das pessoas.
 * @author Wesley Hanauer.
 */

/**
 * Classe Pessoa dita parâmetros para as outras pessoas.
 * @param string
 * @param string
 * @param string
 * @param string
 */

class Pessoa{
	private $nome;
	private $dataNasc;
	private $CPF;
	private $RG;

	/**
	 * Função getter do nome.
	 * @param string
	 */
	public function getNome(){
    	return $this->nome;
	}

	/**
	 * Função setter do nome.
	 * @param string
	 * @return string
	 */
	public function setNome($e){
    	$this->nome = $e;
	}

	/**
	 * Função getter da data de nascimento.
	 * @param string
	 */
	public function getDataNasc(){
    	return $this->dataNasc;
	}

	/**
	 * Função setter da data de nascimento.
	 * @param string
	 * @return string
	 */
	public function setDataNasc($e){
    	$this->dataNasc = $e;
	}

	/**
	 * Função getter do CPF.
	 * @param string
	 */
	public function getCPF(){
    	return $this->CPF;
	}

	/**
	 * Função setter do CPF.
	 * @param string
	 * @return string
	 */
	public function setCPF($e){
    	$this->CPF = $e;
	}

	/**
	 * Função getter do RG.
	 * @param string
	 */
	public function getRG(){
    	return $this->RG;
	}

	/**
	 * Função setter do RG.
	 * @param string
	 * @return string
	 */
	public function setRG($e){
    	$this->RG = $e;
	}
}