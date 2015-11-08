<?php
$xml = new SimpleXMLElement('http://markelsaezsw.esy.es/SistemasWeb/preguntas.xml', 0, TRUE);
?>
<table>
  <thead>
  <table border = 1> 
    <tr>
      <th>Pregunta</th>
      <th>Dificultad</th>
	  <th>Tema</th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($xml->assessmentItem as $licenseElement) :?>
    <tr>
      <td><?php echo $licenseElement->itemBody->p; ?></td>
	  <td><?php echo $licenseElement['complexity']; ?></td>
	  <td><?php echo $licenseElement['subject']; ?></td>
    
    </tr>
<?php endforeach; ?>
  </tbody>
</table>