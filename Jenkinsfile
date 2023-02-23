pipeline {
    agent any

    stages {
        stage('Deploy') {
            steps {
                sh 'printenv'
                sh 'docker-compose up'
            }
        }
    }