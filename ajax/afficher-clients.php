<?php
require "../connect.php";
error_reporting(E_ERROR | E_WARNING | E_PARSE);



$sql = 'SELECT `no_client`, `civilite`, `prenom`, `nom`, `date_naissance`,`adresse`,`ville`,`code_postal`,`tel`,`email`,`no_insee`,`caisse`,`mutuelle` FROM clients'; // SQL Query
foreach ($conn->query($sql) as $row) { // Loop through each row and for each row display table layout
  print '<tr>';
  print '<td> 
			<a href="index.php?page=modifier-client&id='.$row['no_client'].'">'.$row['civilite']."&nbsp;".$row['prenom']."&nbsp;".strtoupper($row['nom']).'</a></br>
			'.$row['adresse'].'</br>
			'.$row['code_postal']."&nbsp;".$row['ville'].'</br></br>
			<span class="secondary radius label">'.$row['no_client'].'</span> 
		</td>'; 
  print '<td>'.$row['date_naissance'].'</td>';
  print '<td>'.$row['tel'].'</td>';
  print '<td>'.$row['email'].'</td>';
  print '<td>'.$row['no_insee'].'</td>';
  print '<td>'.$row['caisse'].'</td>';
  print '<td>'.$row['mutuelle'].'</td>';
  print '</tr>';
};
?>