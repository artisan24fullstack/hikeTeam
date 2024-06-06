### PART 1: Creation of the database SQLITE

To start working, it's easier to already have datas.
Create a database named `hiking` followed by a table called `hikes` and fill it with the following fields:

- **Hikes**:
    - ID (that will be assigned automatically)
    - name
    - distance
    - duration
    - elevation_gain
    - description
    - created_at 
    - updated_at (if needed)

Another tables:

- **Tags**:
    - ID
    - name

Each hikes will have _at least_ one tag (e.g.: Hard, Rocks, Forest, Historical...).

### PART 2: The architecture Laravel

#### MVC & Router (ok)

### PART 3: Layouts 

FRONT 

#### The list of hikes (ok)
#### A single hike (ok)
#### The list of hikes with search (ok)
- per tag (select multiple)
- name
- distance
- duration

ADMIN 

#### Add hike / tag (ok)
#### Edit a hike / tag (ok)
#### Delete a hike / tag (ok)

Create an Admin account who can create, edit & delete any hike & can delete any user or tag.

(TODO) > Use Laravel Breeze
(TODO) > Bonus: display an image with the hike
