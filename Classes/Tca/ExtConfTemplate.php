<?php

class Tx_Phpoffice_Tca_ExtConfTemplate {
	public function renderLibraries() {
		$dirs    = t3lib_div::getAllFilesAndFoldersInPath(
			array(),
			t3lib_extMgm::extPath('phpoffice') . 'Resources/Private/Contrib/',
			'',
			1,
			1,
			'\\.'
		);



		$buffer  = '<table class="typo3-dblist">';
		$buffer .= '<tr class="t3-row-header"><td class="col-title">Library</td><td class="col-title">Information</td><td>Author</td></tr>';
		foreach($dirs as $dir) {
			if(file_exists($dir . 'composer.json')) {
				$object  = json_decode(file_get_contents($dir . 'composer.json'), TRUE);
				$buffer .= '<tr class="db_list_normal"><td><a href="' . htmlspecialchars($object['homepage']) . '">' . basename($dir) . '</a></td><td>' . $object['version'] . '</td><td>';
				foreach($object['authors'] as $author) {
					$buffer .= $author['name'] . '<br>';
				}
				$buffer .= '</td></tr>';
			} elseif(is_dir($dir . '.git')) {
				$buffer .= '<tr><td>' . basename($dir) . '</td><td>composer.json found ...</td><td></td></tr>';
			} else {
				#$buffer .= '<tr><td>' . $dir . '</td></tr>';
			}
		}
		$buffer .= '</table>';
		return $buffer;
	}
}