import json
from flask import Flask, request, abort


app = Flask(__name__)


@app.route('/')
def hello_world():
    return 'Hello World!'


@app.route('/api/keyword')
def show_most_similar() :
    arg = request.args.get('word')
    return json.dumps(arg)

if __name__ == "__main__":
    app.run(debug=True)
