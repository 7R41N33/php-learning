CREATE TABLE IF NOT EXISTS employers (
    id INTEGER PRIMARY KEY,
    name TEXT(100)
);

CREATE TABLE IF NOT EXISTS vacancies (
    id INTEGER PRIMARY KEY,
    employerId INTEGER  NOT NULL,
    name TEXT(100),
    description TEXT(1024),
    isActive TEXT(1),
    type INTEGER NOT NULL,
    salaryFrom INTEGER,
    salaryTo INTEGER,
    schedule TEXT(100),
    testTask INTEGER,
    rating REAL
);

CREATE TABLE IF NOT EXISTS tags (
    id INTEGER PRIMARY KEY,
    name TEXT(50)
);

CREATE TABLE IF NOT EXISTS vacancies_tags (
    vacancyId INTEGER NOT NULL,
    tagId INTEGER NOT NULL,

    PRIMARY KEY(vacancyId, tagId)
);

CREATE TABLE IF NOT EXISTS vacancies_responses (
    id INTEGER PRIMARY KEY,
    userId INTEGER NOT NULL,
    vacancyId INTEGER NOT NULL,
    letter TEXT(1024),
    salaryFrom INTEGER,
    salaryTo INTEGER,
    status INTEGER(1)
);

CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY,
    email TEXT(100)
);
