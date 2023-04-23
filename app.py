from flask import Flask, render_template

app = Flask(__name__)


@app.route("/")
def home():
  return render_template('home.html')


@app.route("/register")
def reg():
  return render_template('register.html')

@app.route("/register1")
def p():
  return render_template('register.php')

if __name__ == "__main__":
  app.run(host='0.0.0.0', debug=True)
