<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Result</title>
    <style>
        /* Basic reset and body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        /* QR Code Container Styling */
        #qrCodeContainer {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* QR Code Image Styling */
        #qrCodeContainer img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        /* Animation classes */
        .fade-in {
            animation: fadeIn 2s;
        }

        .zoom-in {
            animation: zoomIn 2s;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes zoomIn {
            from { transform: scale(0.5); }
            to { transform: scale(1); }
        }

        /* Back to Form link styling */
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: #007bff;
            border: 2px solid #007bff;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        a:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div id="qrCodeContainer">
        <img src="data:image/png;base64,{{ $qrCodeBase64 }}" class="{{ $animation }}" alt="QR Code">
    </div>
    <a href="{{ route('qr.showForm') }}">Back to Form</a>
</body>
</html>
