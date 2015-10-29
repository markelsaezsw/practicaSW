<?php
$xml = new SimpleXMLElement('http://markelsaezsw.esy.es/SistemasWeb/preguntas.xml', 0, TRUE);
?>
<table>
  <thead>
  <table border = 1> 
    <tr>
      <th>Pregunta</th>
      <th>Dificultad</th>
    </tr>
  </thead>
  <tbody>

<?php foreach ($xml->MiPregunta as $licenseElement) :?>
    <tr>
      <td><?php echo $licenseElement->Pregunta; ?></td>
      <td><?php echo $licenseElement->Dificultad; ?></td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>