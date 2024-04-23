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


# open connection
connection, cursor = connect_to_db()

# close connection to database
def close_connection( connection, cursot):
    try:
        cursor.close()
        connection. close()
    except Exception as error:
        print(f"Error closing connection to database: {error}")
        exit(1)

