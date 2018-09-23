from flask import Flask
from flask.ext.mysqldb import MySQL

app = Flask(_name_)
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_DB'] = 'Users'
mysql = MySQL(app)

@app.route('/')
def index():
    cur = mysql.connection.cursor()
    cur.execute("""SELECT * from Users WHERE 1=1""")
    rv = cur.fetchall()
    return rv
if __name__ = '__main__':
    app.run(debug=True")

