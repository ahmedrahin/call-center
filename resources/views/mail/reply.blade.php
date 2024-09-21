<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border: 1px solid #e0e0e0;
            padding: 20px;
            border-radius: 8px;
        }
        h4 {
            color: #ff6162;
            font-size: 24px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        .label {
            font-weight: bold;
            background-color: #f9f9f9;
        }
        .value {
            background-color: #fafafa;
        }
    </style>
</head>
<body>

<div class="email-container">
    <h4>Hey, {{ $replyData['name'] }}</h4>
    <table>
        <tr>
            <td class="label">Your Message:</td>
            <td class="value">{{ $replyData['message'] }}</td>
        </tr>

        <tr>
            <td class="label">Reply Message:</td>
            <td class="value">{{ $replyData['reply_message'] }}</td>
        </tr>
    </table>
</div>

</body>
</html>
