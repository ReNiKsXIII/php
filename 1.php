$_SESSION['user_name'] = $this->name;
		$_SESSION['user_login'] = $this->login;
		$_SESSION['user_pas'] = $this->pas;

	}
	public function loadFromSession(){
		$this->set($_SESSION['user_name'], $_SESSION['user_login'], $_SESSION['user_pas']);
	}
	public function authorize($P){
		if ($P['login'] === $this->login && $P['pas'] === $this->pas){
@@ -32,6 +36,7 @@ public function show() {
		echo '<h3>Имя:'.$this->name.'<h3>';
		echo '<h3>Логин:'.$this->login.'<h3>';
		echo '<h3>Пароль:'.$this->pas.'<h3>';
		echo '<a href="logout.php">Выйти</a>';
	}
}
?> 
	public function show() {
		echo '<h3>Имя:'.$this->name.'<h3>';
		echo '<h3>Логин:'.$this->login.'<h3>';
		echo '<h3>Пароль:'.$this->pas.'<h3>';
	}
}
?> 