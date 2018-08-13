from flask import Flask
from flask import render_template
from flask import request
from flask import url_for
import re
import sys
import types
app=Flask(__name__)

sys.setdefaultencoding("utf-8")



#sys.setdefaultencoding('utf-8')
@app.route('/province',methods=['POST','GET'])
def province():
    if request.method=='POST':
        rev=request.get_json()['city']
        result=selcity(rev)
        return result
    else:
        return render_template('province.blade.html')




if __name__=='__main__':
    app.run(debug=True)