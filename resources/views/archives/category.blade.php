<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $category }}newsの一覧</title>
</head>
<body>
  <p>{{ $category }}の一覧</p>
  @if ($category == 'news')
    <p>本日のニュースをお伝えします</p>
  @endif
</body>
</html>