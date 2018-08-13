<!DOCTYPE html>
  <html lang="en">
    <head>
      <link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
      <script type=text/javascript>
        $(function() {
            $('#calculate').click(function(){
              $.ajax({
                url: '/api/keyword',
                data:{
                  a: $('#a').val()
                },
                dataType: 'JSON',
                type: 'GET',
                success: function(data){
                    $("#result").html(data.result);
                }
                });
             });
        });
  </script>
  </head>
  <body>
    <div class="container">
      <div class="header">
        <h3 class="text-muted">addNum</h3>
      </div>
      <hr/>
      <div>
      <p>
    <input type="text" id='a' size="5" name="a"> +
    <input type="text" id='b' size="5" name="b"> =
    <span id="result">?</span>
    <p><button class="btn btn-success" id="calculate">calculate</button>
      </form>
      </div>
    </div>
  </body>
</html>