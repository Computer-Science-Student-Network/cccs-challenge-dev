from flask import Flask, render_template, render_template_string, request
import subprocess
import os
import time
import json
import random

import requests



app = Flask(__name__)

app.secret_key = "[REDACTED]"

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/submit', methods=['POST'])
def submit():
    
    template = f"<h1>Thank you {request.form['name']} for signing up</h1> <p>you will start to get emails at {request.form['email']}</p>"
    return render_template_string(template)


if __name__ == '__main__':
    app.run(host='0.0.0.0', port=80)
