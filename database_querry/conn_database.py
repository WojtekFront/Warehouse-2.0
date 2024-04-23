import psycopg2 

# import private pssword from pssword
from password import password 

# open connection to database
def connect_to_db():
    try:
        connection =psycopg2.connect(
            host = 'localhost',
            database = 'warehouse',
            user = 'postgres',
            password = password
        )
    except psycopg2.OperationalError as error:
        print(f"Error connecting to database: {error}")

