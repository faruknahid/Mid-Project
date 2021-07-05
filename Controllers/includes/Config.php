		<?php

			function read() {
			$file = fopen(filepath, "r");
			$fz = filesize(filepath);
			$fr = "";
			if($fz > 0) {
			$fr = fread($file, $fz);
			}
			fclose($file);
			return $fr;
			}
		?>