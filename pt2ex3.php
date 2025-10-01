<?php 

	$alunos = [
	    ["nome" => "João", "nota" => 7.5],
	    ["nome" => "Maria", "nota" => 9.0],
	    ["nome" => "Carlos", "nota" => 6.5],
	    ["nome" => "Ana", "nota" => 8.5],
	    ["nome" => "Pedro", "nota" => 5.0],
	    ["nome" => "Julia", "nota" => 7.0],
	    ["nome" => "Lucas", "nota" => 9.5],
	    ["nome" => "Lara", "nota" => 6.0],
	    ["nome" => "Rafael", "nota" => 8.0],
	    ["nome" => "Sofia", "nota" => 7.8],
	];

	$t = 0;
	$mNota = 0;
	$mAluno = "";
	

		foreach ($alunos as $aluno) {
	    $t = $t + $aluno["nota"];
	    if ($aluno["nota"] > $mNota) {
	        $mNota = $aluno["nota"];
	        $mAluno = $aluno["nome"];
	    }
	}

	$media = $t / count($alunos);

	echo"média turma: $media</br>";
	echo"maior nota: $mAluno (Nota: $mNota)";
 ?>