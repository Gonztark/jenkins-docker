pipeline {
    agent any

    stages {
        stage('prueba') {
            steps {
                sh 'sudo docker compose stop'
                sh 'sudo docker compose up --build -d'
       
            }
        }
    }
}