# 📝 To-Do List App

A basic **To-Do List Web Application** built using **HTML**, **CSS**, **PHP**, and **MySQL**. This app allows users to add, mark complete, and delete tasks. Task data is stored in a MySQL database using **phpMyAdmin**.

## 🚀 Features

- ➕ Add new tasks  
- ✅ Mark tasks as complete  
- ❌ Delete tasks  
- 🗂 Tasks saved in MySQL using phpMyAdmin  
- 🌐 Built with HTML, CSS, PHP

  ## 📸 Screenshots

| Add Task | Mark Complete | Delete Task |
|----------|----------------|--------------|
| ![Add Task](<img width="889" height="750" alt="image" src="https://github.com/user-attachments/assets/1425d394-1407-40a7-9529-5e56b7368b71" />) |
| ![Mark Complete](<img width="803" height="826" alt="image" src="https://github.com/user-attachments/assets/3fdb6614-239b-46e4-bf63-8e9668c338fc" />) |
| ![Delete Task](<img width="1269" height="821" alt="image" src="https://github.com/user-attachments/assets/c7d1886f-d902-4e2c-a330-d074ebb6a8de" />) |


# Added Task
<img width="1050" height="848" alt="image" src="https://github.com/user-attachments/assets/57023bd9-11be-4501-9372-6064d93a21bf" />
<img width="1521" height="848" alt="image" src="https://github.com/user-attachments/assets/1ad91a3b-489b-4921-9ee8-40a8c59cef14" />

# Deleted Task
<img width="842" height="838" alt="image" src="https://github.com/user-attachments/assets/d1fef86a-42cb-4cb6-bcd1-b8b7d7fb15d7" />
<img width="1635" height="858" alt="image" src="https://github.com/user-attachments/assets/6aafed70-41a6-4713-95be-880fea9b91ff" />

# Completed Task
<img width="742" height="785" alt="image" src="https://github.com/user-attachments/assets/b295fc82-2381-4e4f-ac5c-bdd2f5ad84c5" />
<img width="1583" height="865" alt="image" src="https://github.com/user-attachments/assets/7c543f4c-1980-4b34-9436-4173d4c324a4" />

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3  
- **Backend**: PHP  
- **Database**: MySQL (phpMyAdmin)  
- **Server**: XAMPP (Apache)

  ## 🧑‍💻 How to Run Locally

1. Install [XAMPP](https://www.apachefriends.org/index.html)
2. Start **Apache** and **MySQL** in XAMPP control panel
3. Copy the folder `To-Do-List` into `htdocs` directory (e.g., `C:\xampp\htdocs\To-Do-List`)
4. Create a database in **phpMyAdmin**:
    - Go to: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
    - Create a database: `todo`
    - Create a table `tasks` with the following structure:
      ```sql
      CREATE TABLE tasks (
          id INT AUTO_INCREMENT PRIMARY KEY,
          task VARCHAR(255) NOT NULL,
          completed BOOLEAN DEFAULT 0
      );
      ```
5. Update your database credentials in `db.php` if needed.
6. Open your browser and visit:  
   [http://localhost/To-Do-List/index.php](http://localhost/To-Do-List/index.php)

## ✅ Completed Functionality

- [x] Add Task  
- [x] Delete Task  
- [x] Mark Task as Complete  
- [x] Use MySQL database to store tasks  
- [x] Status display in phpMyAdmin (Pending/Completed)

## 📌 Future Improvements

- Add edit task feature  
- Add due dates and reminders  
- Add login/authentication system  



