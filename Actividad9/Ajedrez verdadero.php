<html> 
  <body>
    <table border="1">
      <?php
    
      $blanco="blanco.jpg";
      $negro="negro.jpg";
      $dimensiones=8;
      $dimensiones=$dimensiones/2;

      for ($a=1; $a <=$dimensiones ; $a++) {
          echo "<tr>";
          for ($i=1; $i <=$dimensiones ; $i++) { 
              echo "<td>  <embed src=\"negro.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
              echo "<td>  <embed src=\"blanco.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
          }
          echo "</tr>";
          for ($i=1; $i <=$dimensiones ; $i++) { 
              echo "<td>  <embed src=\"blanco.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
              echo "<td>  <embed src=\"negro.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
          }
      }
      echo "</table>";
       ?> 
  </table>
  </body>
  </html>