<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Cloud Platform</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5" style="max-width: 500px;">
    
    <div class="card shadow">
        <div class="card-header bg-dark text-white text-center">
            <h4 class="mb-0">Cloud Platform Selector</h4>
        </div>
        <div class="card-body p-4">
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('platform.redirect') }}" method="POST">
                @csrf
                
                <p class="text-muted mb-3">Choose a platform to visit:</p>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="platform" id="googleDrive" value="google_drive">
                    <label class="form-label form-check-label h6" for="googleDrive">
                        Google Drive
                    </label>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="platform" id="dropbox" value="dropbox">
                    <label class="form-label form-check-label h6" for="dropbox">
                        Dropbox
                    </label>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="platform" id="onedrive" value="onedrive">
                    <label class="form-label form-check-label h6" for="onedrive">
                        OneDrive
                    </label>
                </div>

                <button type="submit" class="btn btn-dark w-100">Go to Platform</button>
            </form>

        </div>
    </div>

</div>
</body>
</html>