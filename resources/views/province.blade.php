<html>
<meta charset="utf-8">
<head>
    <title> show city </title>
    <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $("#selectid1").on('change',function(){
                var objS=document.getElementById('selectid1');
                var provice=objS.options[objS.selectedIndex].value;
                var data={};
                data['city']=provice;
                $.ajax({
                    type: 'POST',
                    url:"/province",
                    data:JSON.stringify(data),  //转化字符串 
                    contentType: 'application/json; charset=UTF-8',
                    success:function(data){ //成功的话，得到消息
                        //alert(data);
                        addselect(data);
                    }
                });
            });
        });
        function addselect(data)
        {
            number=data.split(" ");
            var select=document.getElementById("selectid2");
            //删除所有原来的子结点元素
            $("#selectid2").empty();
            for(var i=0;i<number.length;++i)
            {
                var newItem=document.createElement("option");
                var newItemText=document.createTextNode(number[i]);
                newItem.appendChild(newItemText);
                select.appendChild(newItem);
            }
        }
        
    </script>
</head>

<body>
    <h1 align="center"> 省市联动 </h1>
    <br>
    <center><label align="center"> 省份 </label>
    <select id="selectid1" align="center">
        <option value="福建" align="center"> 福建 </option>
        <option value="重庆" align="center"> 重庆 </option>
        <option value="浙江" align="center"> 浙江 </option>
        <option value="北京" align="center"> 北京 </option>
    </select>
</form>
    <center>
    <label> 城市 </label>
    <select id="selectid2" align="center">
    </select>
</body>
</html>