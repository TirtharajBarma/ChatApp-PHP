# My Chat App

A real-time chat application that bridges communication gaps with instant messaging, active user indicators, and a responsive design. Built with PHP, AJAX, and JavaScript, this app is ideal for fostering collaboration, engagement, and productivity.

## Features

### User Interface
- **Intuitive Navigation**: Simple and clear navigation to access features easily.
- **Responsive Design**: Seamlessly adapts to desktops, tablets, and mobile devices.
- **User-Friendly Features**: Clear icons, interactive buttons, and organized layout.
- **Visual Clarity**: Distinct message bubbles and user profiles for easy communication.

### Real-Time Messaging
- **Instant Messaging**: Enables seamless real-time text chat between users.
- **Active User Indicator**: Displays a green dot for active users.
- **Message Differentiation**: Clearly distinguishes between the user's messages and others'.

### Technology Stack
- **PHP**: Handles server-side logic, including user authentication and message storage.
- **AJAX**: Enables asynchronous communication for real-time updates.
- **JavaScript**: Powers the interactive client-side interface.
- **Database Integration**: Manages user data and chat history.

## Architecture

1. **Server-Side Logic**:
   - Built with PHP to manage user authentication, message storage, and database interactions.

2. **Asynchronous Communication**:
   - AJAX ensures real-time updates without refreshing the page.

3. **Client-Side Interface**:
   - Uses HTML and JavaScript for a dynamic and responsive user experience.

## Setting Up the Database

1. Navigate to `phpMyAdmin`.
2. Create a database named **`real_chat`**.
3. If you prefer a different name for the database:
   - Navigate to `php/config.php`.
   - Update the `$dbname` variable to your desired name.

   ```php
   $dbname = 'your_database_name';
   ```

## Challenges Overcome

1. **Scalability**: Designed to handle a growing user base.
2. **Security**: Ensured user data protection and prevented unauthorized access.
3. **Performance**: Optimized for speed and efficiency under high traffic.

## How to Run

1. Clone the repository.
   ```bash
   git clone https://github.com/TirtharajBarma/ChatApp-PHP.git
   ```
2. Set up your database as mentioned above.
3. Configure the server environment (e.g., XAMPP or WAMP).
4. Navigate to the project directory in your browser.


## Author
**Tirtharaj Barma**

## License
This project is licensed under the [MIT License](LICENSE).

---