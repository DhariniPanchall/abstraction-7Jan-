#abstraction
<html>
	<body>
		<?php
			echo "Abstraction Example";
			echo "<p>Abstraction is the any representation of data in which the implementation details are hidden (abstracted).</p><br>";
			abstract class a
			{
				abstract public function f1();
				abstract public function f2();
			}
			class b extends a
			{
				public function f1()
				{
					echo "Hello";
					$z = 4+8;
					echo $z;
				}
				public function f2()
				{
					echo "World";
				}
			}
			$obj = new b();
			$obj -> f1();
			$obj -> f2();
		?>
	</body>
</html>