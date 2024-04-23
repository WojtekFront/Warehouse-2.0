from conn_database import connection, cursor, close_connection

querry_variable = "database"

try: 
    cursor.execute("""
        CREATE DATABASE IF NOT EXISTS warehouse
            WITH
            OWNER = postgres
            ENCODING = 'UTF8'
            LOCALE_PROVIDER = 'libc'
            CONNECTION LIMIT = -1
            IS_TEMPLATE = False;
        """)
    
except Exception as error:
    print(f"Error creating {querry_variable} {error}")

finally:
    """Commit and close"""
    connection.commit()
    close_connection(connection, cursor)
