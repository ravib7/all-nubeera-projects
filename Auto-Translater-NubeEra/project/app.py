from flask import Flask, render_template, request, jsonify

app = Flask(__name__)

# Mock database (replace this with a real authentication system)
users = {
    'example': 'password'
}

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/login', methods=['POST'])
def login():
    username = request.form['username']
    password = request.form['password']

    # Simulate login process (replace this with real authentication)
    if username in users and users[username] == password:
        return jsonify({'message': 'Login successful!'})
    else:
        return jsonify({'message': 'Invalid username or password!'}), 401
if __name__ == '__main__':
    app.run(debug=True)
