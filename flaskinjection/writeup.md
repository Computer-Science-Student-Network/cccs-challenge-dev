### Flask Injection
The server we are given is running on flask. We can see the code for it and when we do there is the following lines
```py
@app.route('/submit', methods=['POST'])
def submit():    
    template = f"<h1>Thank you {request.form['name']} for signing up</h1> <p>you will start to get emails at {request.form['email']}</p>"
    return render_template_string(template)
```
This means that it is most likely exploitable via Template injection. To test this we can enter `{{7*7}}` into the email or name field and check that it returns 49.
This is because the templates eval whatever is in the template. Because of this we can exploit it by entering `{{config.items()}}` and find the secret key.
