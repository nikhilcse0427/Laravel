<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            background-color: #f9f9f9;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"],
        button {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="radio"] {
            margin-right: 8px;
        }
        button {
            background-color: #28a745;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border: none;
        }
        button:hover {
            background-color: #218838
        }
    </style>
</head>
<body>
    <form action="/submit" method="POST">
        @csrf
        <label>Customer Name:</label>
        <input type="text" name="name" placeholder="Enter your name..." required>
        
        <label>Customer Email:</label>
        <input type="email" name="email" placeholder="Enter your email..." required>
        
        <label>Password:</label>
        <input type="password" name="password" placeholder="Enter your password..." required>
        
        <label>State:</label>
        <input type="text" name="state" placeholder="Enter your state..." required>
        
        <label>Country:</label>
        <input type="text" name="country" placeholder="Enter your country..." required>
        
        <!-- <!-- <label>Phone Number:</label> -->
        <input type="tel" name="phNum" placeholder="Enter your phone number..." required>
        
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Others"> Others
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>