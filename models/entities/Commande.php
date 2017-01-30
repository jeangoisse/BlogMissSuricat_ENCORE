<?php

class Commande
{

	private $id;
	private $ref;
	private $date_expedition;
	private $date_cmd;
	private $client_id;
	private $statut_id;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getRef() {
		return $this->ref;
	}

	public function setRef($ref) {
		$this->ref = $ref;
	}

	public function getDateExp() {
		return $this->date_expedition;
	}

	public function setDateExp($date_expedition) {
		$this->date_expedition = $date_expedition;
	}

	public function getDateCmd() {
		return $this->date_cmd;
	}

	public function setDateCmd($date_cmd) {
		$this->date_cmd = $date_cmd;
	}

	public function getClientId() {
		return $this->client_id;
	}

	public function setClientId($client_id) {
		$this->client_id = $client_id;
	}

	public function getStatutId() {
		return $this->statut_id;
	}

	public function setStatutId($statut_id) {
		$this->statut_id = $statut_id;
	}
}