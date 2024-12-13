# African Countries Management System

## Description
This project is designed to manage data related to African countries and their key cities. It allows users to perform CRUD (Create, Read, Update, Delete) operations on countries and their associated cities, while providing dynamic database integration to manage and display information effectively.

---

## Features

### Functionalities:
- **Add a Country**: Add an African country with key cities, population, and official languages.
- **Update/Delete Country Details**: Modify or remove details of an existing country.
- **Display Countries**: View a list of all African countries with their associated details.

### Database Modeling:
- **ERD (Entity Relationship Diagram)**: Models relationships between countries and their cities, and attributes like population, languages, etc.

---

## Database Structure

### Entities:
1. **Countries**
   - ID (Primary Key)
   - Name
   - Population
   - Official Languages
   - Continent (Default: Africa)

2. **Cities**
   - ID (Primary Key)
   - Name
   - Description
   - Type (Capital or Other)
   - Country ID (Foreign Key)

### Relationships:
- One country has many cities.
- Each city is linked to one country.

---




