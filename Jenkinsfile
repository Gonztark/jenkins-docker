pipeline {
    agent any

    stages {
        stage('Deploy') {
            steps {
                sh 'docker compose --use-host up'
            }
        }
    }
}