pipeline {
    agent any

    stages {
        stage('prueba') {
            steps {
                sh 'sudo docker compose down'
                sh 'sudo docker compose up --build'
            }
        }
    }
}