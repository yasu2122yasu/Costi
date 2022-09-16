<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
    <title>スマホ回線2.0</title>
</head>
  <body>
    <div class="text-center mt-6" ".w-100">
      <br>
      <h2>スマホ回線2.0</h2>
    </div>    
      <div class="row mt-3 mb-5" ".w-100">
        <div class="col-md-6 offset-md-3" ".w-100">
          <form method="get" action="/result" class="search-form">
          
            @csrf
                <div class="form-group" ".w-100">
                    <div class><label for="capacity">毎月使用している容量</label></div>
                        <select class="form-control" name="capacity">
                            @foreach((array)$capacities as $key => $capacity)
                              <option value="{{ $key }}" @if( isset($old_capacity) && (int)$old_capacity === $key ) selected @endif>
                                  {{ $capacity }}
                              </option>
                            @endforeach
                        </select>
                </div>

                <div class="form-group">
                    <div class><label for="cost">毎月のスマホ料金</label></div>
                        <select class="form-control" name="cost">
                            @foreach((array)$costs as $key => $cost)
                              <option value="{{ $key }}" @if( isset($old_cost) && (int)$old_cost === $key ) selected @endif>
                                  {{ $cost }}
                              </option>
                            @endforeach
                        </select>
                </div>

                <div class="form-group">
                    <div class><label for="carrier">キャリアのこだわり</label></div>
                        <select class="form-control" name="carrier">
                            @foreach((array)$carriers as $key => $carrier)
                              <option value="{{ $key }}" @if( isset($old_carrier) && (int)$old_carrier === $key ) selected @endif>
                                  {{ $carrier }}
                              </option>
                            @endforeach
                        </select>
                </div>
                
             <div class="col-md-6 offset-md-3 text-center">
                 <input type="submit" class="btn btn-primary" value="検索">
             </div>
    

          </form>  
        </div>    
      </div>    
  </body>
</html>
