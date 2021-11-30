<!DOCTYPE html>
<html>
<head>
  <title>latihan</title>
  <style>
    .warna-silver {
      background-color: silver;
    }
  </style>
</head>
<body>
  <table cellpadding="5" cellspacing="0">
    <?php for ($i=1; $i<=3; $i++) : ?> 
      <?php if ($i % 2 == 1) : ?>
        <tr class="warna-silver">
      <?php else : ?>
        <tr>
      <?php endif; ?>
        <?php for ($j=1; $j<=3; $j++) : ?> 
          <td>
            <?php echo "baris ke-$i, kolom ke-$j"; ?>
          </td>
        <?php endfor; ?>
        </tr>
    <?php endfor; ?>
  </table>
</body>
</html>
