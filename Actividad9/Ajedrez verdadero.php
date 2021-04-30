<html> 
  <body>
    <table border="1">
      <?php
    
      $blanco="blanco.jpg";
      $negro="negro.jpg";
      $dimensiones=4;
      $dimensiones=$dimensiones/2;
    
      for ($a=1; $a <=$dimensiones ; $a++) {
          echo "<tr>";
          for ($i=1; $i <=$dimensiones ; $i++) { 
              echo "<td>  <embed src=\"negro.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
              echo "<td>  <embed src=\"blanco.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
          }
          if($dimensiones!=0)
          {
            echo "<td>  <embed src=\"negro.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
          }
          echo "</tr>";
          for ($i=1; $i <=$dimensiones ; $i++) { 
              echo "<td>  <embed src=\"blanco.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
              echo "<td>  <embed src=\"negro.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
          }
          if($dimensiones!=0)
          {
            echo "<td>  <embed src=\"blanco.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
          }
         
      }
      if ($dimensiones%2!=0)
      {
        echo "<tr>";
        for ($i=1; $i <=$dimensiones ; $i++) { 
            echo "<td>  <embed src=\"negro.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
            echo "<td>  <embed src=\"blanco.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
        } 
        if($dimensiones!=0)
      {
        echo "<td>  <embed src=\"negro.jpg\" type=\"image/jpg\" width=\"50\" height=\"50\"> </td>";
      }
        echo "</tr>";
      }

      
      echo "</table>";
       ?> 
  </table>
  </body>
  </html>