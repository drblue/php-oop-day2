<?php

class Tracks {
	protected $tracks;

	public function __construct() {
		$this->tracks = [];
	}

	public function addTrack(Track $track) {
		$this->tracks[] = $track;
	}

	public function getTracks() {
		return $this->tracks;
	}

	public function removeTrack(Track $trackToRemove) {
		foreach ($this->tracks as $index => $track) {
			if ($track === $trackToRemove) {
				array_splice($this->tracks, $index);
				return true;
			}
		}
		return false;
	}
}
