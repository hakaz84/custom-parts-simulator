
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>バトオペ2カスタムパーツシュミレーター</title>
</head>

<body>
  <h1>バトオペ2カスタムパーツシュミレーター</h1>
  
  
    @for ($i = 0; $i < 8; $i++) 
        @foreach ($items as $item)
            <select name="example">
                <option value="サンプル">{{$item->parts_name}}</option>
                <option value="サンプル1">サンプル1</option>
                <option value="サンプル2">サンプル2</option>
            </select>
        @endforeach

    @endfor
</body>

</html>