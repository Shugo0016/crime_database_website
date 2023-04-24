import subprocess
from flask import Flask, render_template, request

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


@app.route("/categorySelect")
def category():
  return render_template('categorySelect.html')


if __name__ == "__main__":
  app.run(host='0.0.0.0', debug=True)
