#https://payatu.com/blog/debjeet/understanding-ssti
from flask import Flask, render_template, request
import subprocess
import os
import time
import json
import random

import requests



app = Flask(__name__)

app.secret_key = "NOTTHEFLAG"

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/submit')
def submit():
    return render_template('thanks.html', name=request.form['name'], email=request.form['email'])


if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80)