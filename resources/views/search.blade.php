<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>固定費2.0</title>
</head>
  <body>
    <div class="text-center mt-4">
      <h2>固定費2.0</h2>
    </div>    
      <div class="row mt-3 mb-5">
        <div class="col-md-6 offset-md-3">
          <form method="get" action="/result" class="search-form">
          
            @csrf
                <div class="form-group">
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
                    <div class><label for="carrier">月額の携帯料金</label></div>
                        <select class="form-control" name="carrier">
                            @foreach((array)$carriers as $key => $carrier)
                              <option value="{{ $key }}" @if( isset($old_carrier) && (int)$old_carrier === $key ) selected @endif>
                                  {{ $carrier }}
                              </option>
                            @endforeach
                        </select>
                </div>
                
             <div class="col-md-6 offset-md-3 text-center">
                 <input type="submit" class="btn btn-secondary mt-2" value="検索">
             </div>
    

          </form>  
        </div>    
      </div>    
  </body>
</html>
