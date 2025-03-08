# Eventique - Crafting Memorable Moments

## Project Overview

## Team Members:
| Roll Number  |       Name       |           Email             |       Role       |
|--------------|------------------|-----------------------------|------------------|
| 20220104003  | Atandrila Pushpa | atandrilapushpa@gmail.com   |     Backend      |
| 20220104004  | Mahia Rahman     | mahiarahman2003@gmail.com   | Backend+Frontend |
| 20220104010  | Mantaka Nusaiba  | mantakanusaiba084@gmail.com |      Lead        |
| 20220104023  | Khadiza Khanom   | lk221201@gmail.com          |    Frontend      |

---

### **Objective**
Eventique aims to simplify and enhance the event planning process by providing comprehensive management services for all types of events. The platform eliminates the stress of organizing events by offering expert planning, coordination, and execution, ensuring memorable experiences for every occasion.

---

### **Target Audience**
- Individuals planning personal events like weddings, birthdays, or anniversaries.
- Corporates organizing business events, conferences, or team-building activities.
- Organizations and communities hosting cultural, social, or charity events.

---

### **Tech Stack**
- **Backend:** Laravel  
- **Frontend:** React  
- **Rendering Method:** Client-Side Rendering (CSR)

---

### **UI Design**
Mock UI: [Canva Prototype](https://www.canva.com/design/DAGbJL0KL_c/kbu1brfey_30m9M182UfKA/view?mode=prototype)

---

### **Project Features**
- **User authentication** (registration, login, and recovery)
- **CRUD operations** (Create, Read, Update, Delete)
  
- **API endpoints**:
### **Authentication APIs**  
- **GET** `/login`  
- **POST** `/login-user`  
- **GET** `/registration` 
- **POST** `/register-user` 
- **POST** `/logout` 
- **GET** `/forgot-password`
- **POST** `/forgot-password` 
- **GET** `/reset-password/{token}` 
- **POST** `/reset-password` →  

### **Admin Authentication APIs**  
- **GET** `/admin/login`   
- **POST** `/admin/login`  
- **POST** `/admin/logout`  

### **Dashboard APIs**  
- **GET** `/dashboard`   
- **GET** `/admin/dashboard` 

### **Wedding Package APIs**  
- **GET** `/wedding-packages`
- **GET** `/wedding-package/{id}`  
- **GET** `/weddings/{id}`   

### **Birthday Package APIs**  
- **GET** `/birthday`   
- **GET** `/birthday/{id}` 

### **Corporate Event APIs**  
- **GET** `/corporate` 
- **GET** `/corporate/{id}` 

### **Event Package APIs**  
- **GET** `/event-packages`
- **POST** `/add-package`   
- **DELETE** `/delete-package/{id}` 

### **Booking APIs**  
- **GET** `/book-now` 
- **POST** `/book-now`   
- **GET** `/booknow/{id}`  
- **POST** `/booknow/{id}`  
- **GET** `/booking`   

### **Contact APIs**  
- **GET** `/contact`  
- **POST** `/contact` 

### **About Us API**  
- **GET** `/about` 

### **Milestones**
1. Log in, Sign up, recovery, and interface of the website.
2. Booking of event and Event Pages.
3. Admin Panel.
