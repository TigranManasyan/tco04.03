<?php 
//Trait

/*class World {
	public function sayHello() {
		echo "Hello ";
	}
}

trait sayWorld {
	public function sayHello() {
		parent::sayHello();
		echo "world!";
	}
}

class Base extends World {
	use sayWorld;
}

$ob = new Base;
$ob -> sayHello();*/


/*trait sayHello {
	public function sayHello() {
		echo "Hello ";
	}
}

trait sayWorld {
	public function sayWorld() {
		echo "world!";
	}
}

class Base {
	use sayHello, sayWorld;
}

$ob = new Base;
$ob -> sayHello();
$ob -> sayWorld();*/




// Type hinting

/*function f(bool $x) {
	return $x;
}

echo f("fddf");*/


// Type casting

// $x = 5.5;

//$x = (int)$x;// darcnum enq amboxj tiv
//$x = (string)$x;// darcnum enq text
// echo gettype($x);



// Try ... Catch


$x = -5;

/*function f($a) {
	if($a > 0) {
		return $a;
	} else {
		throw new Exception("Tiv@ bacasakn e", 1);
	}
}



try {
	echo f(-7);
} catch(Exception $error) {
	echo $error -> getMessage();
}*/




git init 

git status 

git add file_name

git commit -m "msg"

git config --global user.name "github_username"
git config --global user.email "github_email"

clear

git add .