FROM php:latest

# Define container working directory.
WORKDIR /app

# Copy project located in current dir (.) into container working directory that can accessed by (.)
COPY . .

# Expose port 8000
EXPOSE 8000

# Start the PHP development server
CMD ["php", "-S", "0.0.0.0:8000"]

# Next we need to lauch this cmd: docker build -t zappimg .